import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import obfuscator from 'rollup-plugin-obfuscator';

const SCSS = [
    'resources/admin/scss/style.scss',
    'resources/admin/scss/style-preset.scss',
    'resources/admin/scss/style-preset.scss',
    'resources/admin/scss/uikit.scss',
];

const FONTS = [
    'resources/admin/fonts/feather.css',
    'resources/admin/fonts/fontawesome.css',
    'resources/admin/fonts/material.css',
    'resources/admin/fonts/tabler-icons.min.css',
    'resources/admin/fonts/inter/inter.css'
]
const JS =[
    'resources/admin/js/component.js',
    'resources/admin/js/layout-compact.js',
    'resources/admin/js/layout-horizontal.js',
    'resources/admin/js/layout-tab.js',
    'resources/admin/js/pcoded.js',
    'resources/admin/js/tech-stack.js',
    'resources/admin/js/dataTable_init.js',
    'resources/admin/js/projects/index.js',
    'resources/admin/js/messages/index.js',
    'resources/admin/js/messages/archived.js',
    'resources/admin/js/app.js'
]
export default defineConfig({

    esbuild: {
        target: 'es2018',
        format: 'cjs',
    },
    plugins: [
        laravel({
            input: [
                ...SCSS,
                ...JS,
                ...FONTS
            ],
            refresh: true,
        }),
        obfuscator({
            options: {
                compact: true,
                controlFlowFlattening: true,
                controlFlowFlatteningThreshold: 0.75,
                deadCodeInjection: false,
                deadCodeInjectionThreshold: 0.4,
                debugProtection: false,
                debugProtectionInterval: 0,
                disableConsoleOutput: false,
                domainLock: [],
                domainLockRedirectUrl: 'about:blank',
                forceTransformStrings: [],
                identifierNamesCache: null,
                identifierNamesGenerator: 'mangled-shuffled',
                identifiersDictionary: [],
                identifiersPrefix: 'gero',
                ignoreImports: false,
                inputFileName: '',
                log: false,
                numbersToExpressions: false,
                optionsPreset: 'medium-obfuscation',
                renameGlobals: false,
                renameProperties: false,
                renamePropertiesMode: 'safe',
                reservedNames: [],
                reservedStrings: [],
                seed: 0,
                selfDefending: false,
                simplify: true,
                sourceMap: false,
                sourceMapBaseUrl: '',
                sourceMapFileName: '',
                sourceMapMode: 'separate',
                sourceMapSourcesMode: 'sources-content',
                splitStrings: false,
                splitStringsChunkLength: 10,
                stringArray: true,
                stringArrayCallsTransform: true,
                stringArrayCallsTransformThreshold: 0.75,
                stringArrayEncoding: ['base64'],
                stringArrayIndexesType: [
                    'hexadecimal-number'
                ],
                stringArrayIndexShift: true,
                stringArrayRotate: true,
                stringArrayShuffle: true,
                stringArrayWrappersCount: 1,
                stringArrayWrappersChainedCalls: true,
                stringArrayWrappersParametersMaxCount: 2,
                stringArrayWrappersType: 'variable',
                stringArrayThreshold: 0.75,
                target: 'browser',
                transformObjectKeys: false,
                unicodeEscapeSequence: false
            },
        }),
    ],
    build:{
        commonjsOptions: { transformMixedEsModules: true }
    }
});
