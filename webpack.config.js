const HtmlWebpackPlugin = require('html-webpack-plugin');
const webpack = require('webpack');
const path = require('path');


module.exports = {
    mode: 'production',
    entry: './index.php',
    output: {
        // options related to how webpack emits results
        path: path.resolve(__dirname, "dist"),
        filename: "bundle.js", // string    // the filename template for entry chunks
        publicPath: "/assets/", // string    // the url to the output directory resolved relative to the HTML page
        library: "ITGeen", // string,
        // the name of the exported library
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: "babel-loader"
            }
        }]
    },
    resolve: {

    },
    performance: {

    },
    plugins: [
        new HtmlWebpackPlugin()
    ],
}