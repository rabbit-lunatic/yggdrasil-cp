/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'small': '1024px',
      // Mantém os breakpoints padrão do Tailwind
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {
      colors: {
        'brand-main': '#5B719F',
        'brand-red': '#ED7780',
        'brand-green': '#5B9F87',
        'brand-purple': '#8868BF',
        'brand-orange': '#F28A6A',
        'brand-yellow': '#EDBC77',
        'ui-bg-subtle': '#f8f9fa',
        'ui-bg-base': '#ffffff',
        'ui-border-base': '#e5e7eb',
        'ui-fg-base': '#5B719F',
        'ui-fg-subtle': '#6b7280',
        'ui-fg-on-inverted': '#ffffff',
      },
      fontFamily: {
        'sans': ['Roboto Condensed', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
        'robotoCond': ['Roboto Condensed', 'sans-serif'],
        'core': ['Changa One', 'cursive'],
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-20px)' },
        },
      },
      animation: {
        float: 'float 3s ease-in-out infinite',
      },
      boxShadow: {
        'buttons-neutral': '0 0 0 1px rgba(0, 0, 0, 0.1)',
        'buttons-neutral-focus': '0 0 0 2px rgba(91, 113, 159, 0.5)',
        'buttons-colored': '0 2px 4px rgba(0, 0, 0, 0.1)',
        'buttons-colored-focus': '0 0 0 3px rgba(91, 113, 159, 0.3)',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
