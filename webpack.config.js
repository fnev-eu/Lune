var Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('./src/Resources/public/')
    .setPublicPath('/')
    .setManifestKeyPrefix('bundles/lune')

    .cleanupOutputBeforeBuild()
    .enableSassLoader()
    .enableSourceMaps(false)
    .enableVersioning(false)
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .autoProvidejQuery()

    .addEntry('main', './assets/js/app.js')
;

module.exports = Encore.getWebpackConfig();
