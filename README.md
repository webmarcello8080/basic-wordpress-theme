# Basic WordPress Theme (Starter Kit)

A lightweight, modern WordPress starter theme built with:

- WordPress (classic theme structure)
- Vite (asset bundling)
- Tailwind CSS v3
- SCSS architecture
- JavaScript modular structure

This theme is designed as a **reusable boilerplate** for fast WordPress development.

---

## 🚀 Features

- ⚡ Vite-powered build system (fast dev + production builds)
- 🎨 Tailwind CSS v3 integration
- 🧩 SCSS structure for scalable styling
- 📦 Organized source folder (`src/`)
- 🧱 Clean WordPress theme foundation
- 🔁 Watch mode for development
- 📁 Separate build output (`dist/`)

---

## 📁 Folder Structure
basictheme/
│
├── dist/ # Compiled assets (ignored in git)
├── src/
│ ├── js/
│ │ └── app.js
│ ├── scss/
│ │ ├── app.scss
│ │ ├── base/
│ │ ├── layout/
│ │ └── components/
│
├── template-parts/ # WordPress template parts
├── inc/ # Theme functions/modules
├── functions.php
├── style.css
├── index.php
├── header.php
├── footer.php
│
├── vite.config.js
├── tailwind.config.js
├── postcss.config.js
└── package.json

## 🛠 Installation

### 1. Install dependencies

`bash`
npm install

### 2. Development mode
npm run dev

Runs Vite dev server for:

SCSS compilation
JS bundling
Hot reload (depending on setup)

### 3. Production build
npm run build

Generates optimized assets in: dist/