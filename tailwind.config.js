import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        fontFamily: {
            heading: ['"Bebas Neue"', 'sans-serif'],
            body: ['"Open Sans"', 'sans-serif'],
        },
        extend: {
            colors: {
                growthgreen: '#5fa331',
                growthdarkgrey: '#333333',
                growthlightgrey: '#999999',
            },
        },
    },
    plugins: [],
}
