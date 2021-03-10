const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: './src/app.js',
  mode: 'development',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  devServer: {
    contentBase: path.resolve(__dirname, 'dist'),
    watchContentBase: true,
  },
  plugins: [
    new MiniCssExtractPlugin(),
    // Connect our html file with output
		// Inject bundle.js into the html file
		new HtmlWebpackPlugin({
			template: __dirname + '/src/index.html',
			filename: 'index.html',
			inject: 'body',
		}),
    // Copy all the assets from 'src/assets/' to 'dist/assets/'
    new CopyWebpackPlugin({
      patterns: [
        { from: "src/assets", to: "assets" },
      ],
    }),
  ],
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader", 	 		// translates CSS into CommonJS
          "postcss-loader",	 	// Created a postcss.config.js file for autoprefixer
          "sass-loader", 	 		// compiles Sass to CSS, using Node Sass by default
        ],
      },
	    {
	      test: /\.(png|jpe?g|gif|woff|woff2|eot|ttf|otf)$/,	// load images and fonts
	      use: [
          {
            loader: 'file-loader?name=[name].[ext]',	// <-- retain original file name
          }
	      ]
	    },
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',   // Translate ES6 to ES5
          options: {
            presets: ['@babel/preset-env'],
          }
        }
      }
    ],
  },
};