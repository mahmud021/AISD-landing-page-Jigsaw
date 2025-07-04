module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
        colors: {
            'aisd-orange': '#FF7F50',
            'aisd-orange-light': '#ff7f5044',
            'aisd-blue': '#0a558c',
            'aisd-blue-light': '#1070ca',
            'aisd-gray': '#4b5563',
            'aisd-gray-light': '#9ca3af',
        },
        fontFamily: {
            sans: ['Inter', 'sans-serif'],
        },
        boxShadow: {
            'aisd-card': '0 4px 20px rgba(0, 0, 0, 0.08)',
            'aisd-card-hover': '0 8px 30px rgba(0, 0, 0, 0.12)',
        },
    },
  },
  plugins: [],
};
