module.exports = [

    {
        entry: {
            "widget-registeredusers": "./app/components/widget-registeredusers.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                {test: /\.vue$/, loader: "vue-loader"},
                {test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"}
            ]

        }
    }

];
