const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const EXCLUDE_JS = [
    /node_modules\/(?!(dom7|fetch-headers)\/).*/,
];
const PRODUCTION = process.env.NODE_ENV === 'production';
const $ = require('jquery');

const sassConfig = ExtractTextPlugin.extract({
    // style loader first
    fallback: 'style-loader',
    use: [{
        loader: 'css-loader',
        options: {
            minimize: true,
            importLoaders: 1,
            url: false,
        },
    }, 'postcss-loader', 'sass-loader'],
});

module.exports = {
    entry: __dirname + "/src/index.js",
    output: {
        path: __dirname + '/javascript',
        filename: 'main.js'
    },
    resolve: {
        extensions: ['.js', '.jsx'],
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                use: 'babel-loader',
                exclude: EXCLUDE_JS,
                include: __dirname,
            },
            {
                test: /\.(scss|css)$/,
                use: sassConfig,
            },
              {
    test: /\.(png|jpg|gif)$/,
    use: [
      {
        loader: 'file-loader',
      },
    ],
  },
  {
    test: /\.svg$/,
    use: [
      {
        loader: 'file-loader',
      },
    ],
  },
  {
    test: /\.(eot|woff|woff2|ttf)$/,
    use: [
      {
        loader: 'file-loader',
      },
    ],
  }
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: '../css/[name].css',
        }),
        new webpack.optimize.UglifyJsPlugin({ minimize: true, comments: false }),
        new webpack.DefinePlugin({
            'process.env': {
                NODE_ENV: JSON.stringify('production'),
            },
        }),
          new webpack.ProvidePlugin({
   $: "jquery",
   jQuery: "jquery"
  })
    ]
}
