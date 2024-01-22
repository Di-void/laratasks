import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                "gelion-regular": ["Gelion Regular"],
                "gelion-bold": ["Gelion Bold"],
                "gelion-bold-italic": ["Gelion Bold Italic"],
                "gelion-semibold": ["Gelion Semi Bold"],
                "gelion-semibold-italic": ["Gelion Semi Bold Italic"],
                "gelion-regular-italic": ["Gelion Regular Italic"],
                "gelion-thin": ["Gelion Thin"],
                "gelion-thin-italic": ["Gelion Thin Italic"],
                "gelion-medium": ["Gelion Medium"],
                "gelion-medium-italic": ["Gelion Medium Italic"],
            },
            colors: {
                "clr-secondary-300": {
                    DEFAULT: "rgba(var(--primary-secondary-300))",
                },
                "clr-primary": {
                    100: "rgba(var(--primary-100))",
                    200: "rgba(var(--primary-200))",
                    300: "rgba(var(--primary-300))",
                },
                "clr-secondary": {
                    100: "rgba(var(--secondary-100))",
                    200: "rgba(var(--secondary-200))",
                    300: "rgba(var(--secondary-300))",
                    400: "rgba(var(--secondary-400))",
                    500: "rgba(var(--secondary-500))",
                },
                "clr-bg-primary": {
                    100: "rgba(var(--bg-primary-100))",
                },
                "clr-text": {
                    100: "rgba(var(--text-100))",
                    200: "rgba(var(--text-200))",
                    navy: "rgba(var(--text-navy))",
                    pending: "rgba(var(--text-pending))",
                    progress: "rgba(var(--text-progress))",
                    complete: "rgba(var(--text-complete))",
                },
            },
        },
    },

    plugins: [forms],
};
