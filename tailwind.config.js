module.exports = {
  theme: {
    extend: {
        pagination: theme => ({
        // color: theme('colors.teal.500'),
        link: 'bg-white px-4 py-1 border-r border-t border-b text-black no-underline text-gray-600',
        wrapper: 'justify-start flex my-10',
        item: 'block',
        linkActive: 'bg-gray-200',//border-yellow font-bold
        linkFirst: 'bg-gray-200 rounded-l-sm',
        linkLast: 'bg-gray-200 rounded-r-sm',
    })
    }
  },
  variants: {},
  plugins: [
      require('tailwindcss-plugins/pagination')
  ]
}
