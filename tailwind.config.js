/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            playfair: ["Playfair Display", "serif"],
            roboto: ["Roboto Condensed", "sans-serif"],
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            red: {
                light: "hsl(var(--color-raspberry-red-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-raspberry-red) / <alpha-value>)",
                dark: "hsl(var(--color-raspberry-red-dark) / <alpha-value>)",
            },
            brown: {
                light: "hsl(var(--color-clay-brown-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-clay-brown) / <alpha-value>)",
                dark: "hsl(var(--color-clay-brown-dark) / <alpha-value>)",
            },
            green: {
                light: "hsl(var(--color-nature-green-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-nature-green) / <alpha-value>)",
                dark: "hsl(var(--color-nature-green-dark) / <alpha-value>)",
            },
            blue: {
                light: "hsl(var(--color-sky-blue-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-sky-blue) / <alpha-value>)",
                dark: "hsl(var(--color-sky-blue-dark) / <alpha-value>)",
            },
            gray: {
                light: "hsl(var(--color-stone-gray-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-stone-gray) / <alpha-value>)",
                dark: "hsl(var(--color-stone-gray-dark) / <alpha-value>)",
            },
            yellow: {
                light: "hsl(var(--color-sand-yellow-light) / <alpha-value>)",
                DEFAULT: "hsl(var(--color-sand-yellow) / <alpha-value>)",
                dark: "hsl(var(--color-sand-yellow-dark) / <alpha-value>)",
            },
            white: "rgb(var(--color-white) / <alpha-value>)",
            whiteGray: "rgb(var(--color-white-gray) / <alpha-value>)",
            blackGray: "rgb(var(--color-black-gray) / <alpha-value>)",
            black: "rgb(var(--color-black) / <alpha-value>)",
        },
    },
    plugins: [],
};
