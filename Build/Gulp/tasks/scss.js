// Hack the ability to import directories in Sass
// Import the whole directory with @import "foobar/all";

function getBase() {
    let base = null;
    for (const KEY in config.packages) {
        base = config.packages[KEY].root.base;
        break;
    }
    if (base === null) {
        base = '';
    }
    return base;
}

function getConfig() {
    const SURE_ARRAY = require('../functions/sureArray');
    const SUBSET_MATCHER = '?(.[A-Za-z0-9]*).scss';
    const BASE = getBase();
    const TASK_CONFIG = {
        banner: '// DO NOT EDIT DIRECTLY!\n// Generated by Carbon.Gulp\n\n',
        paths: {
            all: SURE_ARRAY(config.root.watch).map(value =>
                path.join(BASE, '**', value, `_all${SUBSET_MATCHER}`)
            ),
            allsub: SURE_ARRAY(config.root.watch).map(value =>
                path.join(BASE, '**', value, `_allsub${SUBSET_MATCHER}`)
            ),
            fusion: SURE_ARRAY(config.root.watch).map(value =>
                path.join(BASE, '**', value, `_allFusion${SUBSET_MATCHER}`)
            )
        }
    };

    return TASK_CONFIG;
}

function getSubset(name) {
    return name.includes('.')
        ? name
              .split('.')
              .splice(1)
              .join('.')
        : false;
}

function filterPartial(file, subset) {
    let parseFile = path.parse(file);
    let name = parseFile.name;
    let noUnderline = !name.startsWith('_');
    let scss = parseFile.ext === '.scss';
    let includeSubset = subset
        ? name.endsWith(`.${subset}`)
        : !name.replace('.noLinter', '').includes('.');

    return noUnderline && scss && includeSubset;
}

function scanSubdirectories(directory, subset) {
    const READDIR_RECURSIVE = require('fs-readdir-recursive');
    return READDIR_RECURSIVE(directory, (name, index, dir) => {
        let ext = path.extname(name);
        let visible = !name.startsWith('_') && !name.startsWith('.');
        let isFolder = subset ? !ext.replace(`.${subset}`, '') : !ext;
        
        // Don't scan node_modules folders
        if (isFolder && name == 'node_modules') {
            return false;
        }

        // Scss file check
        let isScssFile = false;

        // We are not in the same folder and have the ext .scss
        if (directory !== dir && ext === '.scss') {
            // We are inside a subset folder
            if (
                subset &&
                (dir.endsWith(`.${subset}`) || dir.includes(`.${subset}/`))
            ) {
                isScssFile = true;
            } else {
                isScssFile = filterPartial(name, subset);
            }
        }

        // We have a visible file, a scss file or a folder
        if (visible && (isScssFile || isFolder)) {
            return name;
        } else {
            return false;
        }
    });
}

// Append import statements for each partial
function writeImportStatements(partials, file, prepend = '') {
    partials.forEach(partial => {
        let regex = new RegExp(path.sep, 'g');
        partial = partial.replace('.scss', '').replace(regex, '/');
        fs.appendFileSync(file, `@import "${prepend}${partial}";\n`);
    });
}

function getTask(callback) {
    const TASK_CONFIG = getConfig();
    TASK_CONFIG.paths.all.forEach(folder => {
        glob(folder, (error, files) => {
            files.forEach(allFile => {
                let parse = path.parse(allFile);
                let subset = getSubset(parse.name);

                // Get partials
                let partials = fs
                    .readdirSync(parse.dir)
                    .filter(file => filterPartial(file, subset));

                // Write banner
                fs.writeFileSync(allFile, TASK_CONFIG.banner);
                // Write import statements
                writeImportStatements(partials, allFile);
            });
        });
    });
    TASK_CONFIG.paths.allsub.forEach(folder => {
        glob(folder, (error, files) => {
            files.forEach(allFile => {
                let parse = path.parse(allFile);
                let subset = getSubset(parse.name);
                let partials = scanSubdirectories(parse.dir, subset);

                // Write banner
                fs.writeFileSync(allFile, TASK_CONFIG.banner);
                // Write import statements
                writeImportStatements(partials, allFile);
            });
        });
    });
    TASK_CONFIG.paths.fusion.forEach(folder => {
        glob(folder, (error, files) => {
            files.forEach(allFile => {
                let parse = path.parse(allFile);
                let subset = getSubset(parse.name);
                let fusionPath = `${
                    parse.dir.split('Private/')[0]
                }Private/Fusion`;
                let partials = scanSubdirectories(fusionPath, subset);
                let prepend = `${fusionPath.replace(
                    /(^\.src\/|^_src\/|[\w]*Packages\/(Sites|Plugins)\/)/,
                    ''
                )}/`;

                // Write banner
                fs.writeFileSync(allFile, TASK_CONFIG.banner);
                // Write import statements
                writeImportStatements(partials, allFile, prepend);
            });
        });
    });
    if (typeof callback == 'function') {
        callback();
    } else {
        return true;
    }
}

module.exports = exportTask('scss', getTask);
