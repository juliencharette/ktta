import kirby from 'vite-plugin-kirby'
import { resolve } from 'path'

const cwd = process.cwd()

export default ({ mode }) => ({
    root: 'src',
    base: mode === 'development' ? '/' : '/dist/',

    resolve: {
        alias: [{ find: '@', replacement: resolve(cwd, 'src') }]
    },

    build: {
        outDir: resolve(process.cwd(), 'public/dist'),
        emptyOutDir: true,
        rollupOptions: { input: resolve(cwd, 'src/app.js') }
    },

    plugins: [kirby()]
})
