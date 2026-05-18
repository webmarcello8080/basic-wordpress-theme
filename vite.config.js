import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    minify: 'esbuild',
    rollupOptions: {
      input: {
        app: path.resolve(__dirname, 'src/js/app.js')
      },
      output: {
        entryFileNames: 'js/app.min.js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith('.css')) {
            return 'css/app.min.css';
          }

          return 'assets/[name][extname]';
        }
      }
    }
  }
});