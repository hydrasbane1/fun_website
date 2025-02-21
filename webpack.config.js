// webpack.config.js
const path = require('path');

module.exports = {
	mode: 'development',
	entry: {
		script: {import: './js/index.js', filename: '[name].js'},
		style: {import: './styles/default_styles.css', filename: '[name].css'}
	},
	output: {
		filename: '[name].js',
		publicPath: 'dist',
		cssFilename:'[name].css',
	},
	devServer:{
		static: {
			directory: path.join(__dirname,'/'),
		},
		compress: true,
		port: 8080,
	},
	module:{
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use:{
					loader:'babel-loader',
					options: {
						presets:['@babel/preset-env']
					}
				}
			},
			{
				test:/\.css$/,
				exclude: /node_modules/, 
				use:['style-loader','css-loader'],
			}
		]
	}

};