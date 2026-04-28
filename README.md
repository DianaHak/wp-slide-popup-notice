# WP Slide Popup Notice

A lightweight, clean, and customizable slide-in popup for WordPress.

This snippet adds a modern notification card that slides in from the left side of the screen after a short delay. It is designed to be minimal, non-intrusive, and reusable across different themes.

## 📸 Preview

![Slide Popup Preview](screenshot_1.png)
---

## ✨ Features

- Slide-in animation from the left
- Clean, modern card-style UI
- Fully responsive (mobile-friendly)
- No dependencies (pure PHP + CSS + JS)
- Shows only once per session (using sessionStorage)
- Easy to customize text and styling

---

## 📦 Installation

1. Open your theme’s functions.php file (preferably use a child theme)
2. Paste the provided code at the bottom
3. Save and refresh your website

---

## ⚙️ Behavior

- Appears 4 seconds after page load
- Stays visible for 15 seconds
- Slides out automatically
- Will not show again during the same session

---

## 🎨 Customization

### Change text

Edit this part:

<h3>Just a quick note</h3>
<p>Your text here...</p>

---

### Change position

Default (bottom-left):

left: 20px;
bottom: 20px;

---

### Change timing

// Show delay
setTimeout(..., 4000);

// Visible duration
setTimeout(..., 15000);

---

### Disable session restriction

Remove this line:

sessionStorage.setItem(sessionKey, 'yes');

---

## 🧠 Use Cases

- Announcements
- Notices
- Tips or onboarding hints
- Marketing messages
- UX nudges

---

## ⚠️ Notes

- No external libraries required
- Works with most WordPress themes
- Recommended to use in a child theme to avoid losing changes on updates

---

## 📄 License

MIT — free to use, modify, and distribute
