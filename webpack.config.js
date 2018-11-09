const path = require('path');
const glob = require("glob");
const { VueLoaderPlugin } = require('vue-loader')
const entryFiles = glob.sync('./app/Modules/**/Views/*.js').reduce((previousValue, currentValue, currentIndex, array) => {
    return typeof previousValue === 'string' ?
      {
        [path.basename(previousValue, path.extname(previousValue))]: previousValue,
        [path.basename(currentValue, path.extname(currentValue))]: currentValue
      }
      :
      { ...previousValue, [path.basename(currentValue, path.extname(currentValue))]: currentValue }
  })

module.exports = {
  entry: entryFiles,
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/js/Modules/'),
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        use: 'vue-loader'
      }
    ]
  }
 
};