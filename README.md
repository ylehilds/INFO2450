# INFO2450

A portfolio-ready set of **front-end exercises and mini-projects** focused on core web skills: semantic HTML, modern CSS, vanilla JavaScript, and ASP.NET. Everything is organized under `src/` so you can open, run, and iterate quickly.

## ✨ Highlights
- **Hands-on practice:** small pages/components emphasizing layout, styling, DOM manipulation, and UX polish.
- **Framework-light:** solutions favor **vanilla HTML/CSS/JS** so fundamentals are clear and portable.
- **Tweakable:** each exercise is easy to extend (responsive breakpoints, accessibility, micro-interactions).
- **Portfolio-friendly:** concise structure and simple local-run steps make it easy to showcase.

## 📂 Project Structure
    .
    ├─ src/                 # All exercises/mini-projects live here
    │  ├─ <exercise>/       # Self-contained page(s) per exercise
    │  │  ├─ index.html
    │  │  ├─ styles.css
    │  │  └─ app.js
    ├─ LICENSE              # MIT
    └─ README.md            # This file

> Some folders may be HTML/CSS-only (no JS). If an exercise uses extra assets (images/fonts), you’ll see an `assets/` subfolder next to it.

## 🛠 Tech Stack
- **Languages:** HTML5, CSS3, JavaScript (ES6+), ASP.NET
- **Build tools:** none required (no bundlers by default)
- **Unique libraries:** none globally — individual exercises are intentionally framework-free unless a folder notes otherwise  
  (If a specific exercise includes a library like Bootstrap or Font Awesome, it will link it directly in that exercise’s `index.html`.)

## 🚀 Run Locally
Choose any of the following — all serve static files from `src/`:

**Option A: VS Code Live Server (easiest)**
1) Open the repo in VS Code
2) Install the “Live Server” extension
3) Right-click an `index.html` (e.g., `src/<exercise>/index.html`) → “Open with Live Server”

**Option B: Python Simple HTTP Server**
python3 -m http.server 5500 -d src
Then open:
http://localhost:5500/<exercise>/index.html

**Option C: Node http-server**
npx http-server src -p 5500
Then open:
http://localhost:5500/<exercise>/index.html

Tip: Each exercise is self-contained. Navigate directly to the exercise’s `index.html` in the served directory listing (e.g., `/Projects and exercises/Project6/index.html`).

## 🧪 How to Explore & Extend
- **HTML:** use semantic tags (`header`, `main`, `section`, `nav`, `footer`) and ARIA hints where appropriate.
- **CSS:** lean on Flexbox/Grid, mobile-first breakpoints, and CSS custom properties (design tokens).
- **JS (if present):** keep logic modular; add keyboard support and edge-case handling.
- **Accessibility:** verify focus order, color contrast, and roles/labels; add `:focus-visible` styles.
- **Performance:** audit layout shifts, image sizes, and unused CSS in DevTools.

## 🔭 Ideas to Expand
- Add a small **component library** folder (buttons/cards/modals) using shared tokens.
- Create a **responsive pass**: mobile-first breakpoints for each exercise.
- Add **dark mode** using `prefers-color-scheme` and a toggle saved in `localStorage`.
- Include basic **unit tests** for JS exercises (e.g., Jest + jsdom) in a `tests/` folder (optional).
- Package selected exercises with Vite/Parcel if you want hot-reload while iterating.

## 📄 License
MIT — see `LICENSE`.

## 👤 Author
**Lehi Alcantara**  
🌐 https://www.lehi.dev  
✉️ lehi@lehi.dev