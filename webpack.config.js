const autoprefixer = require('autoprefixer');
const webpack = require('webpack');
const path = require('path');
const precss = require('precss');

const TransferWebpackPlugin = require('transfer-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');


module.exports = {
	//devtool: 'source-map',
	watch: true,
	watchOptions: {
		ignored: /node_modules/
	},
	entry: [
		'./config.js',
		'./fonts.config.scss',
		'./config.scss'
	],
	output: {
		filename: 'webroot/js/bundle.js',
		path: path.resolve(__dirname, 'public_html'),
		publicPath: '/'
	},
	plugins: [
		new LiveReloadPlugin(),
		new webpack.optimize.UglifyJsPlugin({
			compress: { warnings: false }
		}),
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery',
			'window.jQuery': 'jquery',
			Popper: ['popper.js', 'default'],
			AOS: 'aos'
		}),
		new ExtractTextPlugin('webroot/css/styles.min.css'),
		new CopyWebpackPlugin([
			{from:'./wrapkit/ui',to:'webroot/images/ui'},
			{from:'./wrapkit/scss/icons/iconmind/fonts',to:'webroot/fonts'},
			{from:'./wrapkit/scss/icons/simple-line-icons/fonts',to:'webroot/fonts'},
			{from:'./wrapkit/scss/icons/themify-icons/fonts',to:'webroot/fonts'},
			{from:'./wrapkit/scss/icons/weather-icons/fonts',to:'webroot/fonts'},
			{from:'./node_modules/font-awesome/fonts',to:'webroot/fonts'}
		])
	],
	module: {
		rules: [
			{
				test: /\.(scss)$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [
						{
							loader: 'css-loader', // translates CSS into CommonJS modules
							options: {
								minimize: true
							}
						}, {
							loader: 'postcss-loader', // Run post css actions
							options: {
								plugins() {
									// post css plugins, can be exported to postcss.config.js
									return [
										precss,
										autoprefixer
									];
								}
							}
						}, {
							loader: 'sass-loader' // compiles SASS to CSS
						}
					]
				})
			},
			{
				test: /\.css$/, use: ['style-loader', 'css-loader', 'postcss-loader']
			},
			{
				test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
				use: 'url-loader?limit=10000&name=webroot/fonts/[name].[ext]',
			},
			{
				test: /\.(ttf|eot|svg)(\?[\s\S]+)?$/,
				use: 'file-loader?name=webroot/fonts/[name].[ext]'
			},

			// font-awesome
			{
				test: /font-awesome\.config\.js/,
				use: [
					{ loader: 'style-loader' },
					{ loader: 'font-awesome-loader' }
				]
			},

			// Bootstrap 4
			{
				test: /bootstrap\/dist\/js\/umd\//, use: 'imports-loader?jQuery=jquery'
			}
		]
	}
};