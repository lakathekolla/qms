# Quiz Management System (University Project Archive)

This is an **old university PHP project** I built around **12** **years ago** and I’m uploading it to GitHub as a personal archive.

It’s here mainly as a **memory**, and also as a reminder of how far I’ve come since then.
The code is *honestly quite “ugly” by today’s standards* (inline PHP, old MySQL functions, no structure, etc.) — but it’s also a lovely snapshot of early learning where I tried to build a complete system end-to-end.

---
## PHP Version Note

This project was originally written for older PHP/MySQL and is kept as-is on `main`.
If you want a runnable modern version on PHP 8+, check the **`php8-compat`** branch.

---

**Free to use** — no licence, no rules, no lawyers.  
Do whatever you want with it… but if it ruins your day, breaks your server, or summons spaghetti-code demons,  
please don’t blame me — **message me and tell me what went wrong so I can laugh and learn** 😄

**LakruwanX**  
Updated: **3 January 2026**


## What I tried to build 

### Student side

- Sign up & sign in
- See available quizzes
- Answer **MCQ quizzes** (one question at a time)
- Optional **question images**
- A **Hint** button (shows a hint for the current question)
- Final score stored in the database

### Admin / Lecturer side

- Admin area with navigation tabs
- **Manage quizzes**
  - Create new quizzes
  - Add questions with:
    - question text
    - up to 5 MCQ answers
    - correct answer number
    - hint text
    - optional image reference/upload folder
- **Remove / edit** quiz content (basic management screens)
- **Statistics / student progress**
  - View marks per quiz for students
- Admin can add other admins (stored in `admin` table)

---

## Tech stack (classic old-school)

- Plain **PHP** (no framework)
- **MySQL** (uses `mysql_*` functions)
- HTML / CSS / JavaScript
- A lot of **framesets / iframes** (very “that era” 😄)

---

## Project structure (high level)

- `index.php` – entry point / landing page
- `sign_iframe.php` – login & registration tabs
- `security.php` – login logic (student/admin routing)
- `system/main/` – student pages (quiz list, quiz runner, profile, help)
- `system/quizFrame/` – admin/lecturer area (manage quiz, editor, statistics)

---

## If you *really* want to run it (optional)

This repo is mainly for archive purposes, but if you want to see it live:

1. Use a server stack like **XAMPP/WAMP/MAMP**.
2. Important: this code uses `mysql_*` which is removed in PHP 7+.
   - Best chance of running without edits is **PHP 5.x** (or you must upgrade it to `mysqli/PDO`).
3. Put the project at the **web root**, because many includes are written like:
   - `include '/lib/connect.php'`
   - `include '/system/main/lib/connect.php'`
     (Those paths assume the project is at the document root.)
4. Create a MySQL database named:
   - `uoc_qms` (this is hard-coded in `system/main/lib/connect.php`)
5. Create the required tables (schema dump is not included in this archive).

---

## Notes / “Why this code is bad” (and why I keep it!)

This is a learning snapshot, so it contains many things I would never do now, like:

- Deprecated `mysql_*` functions
- Plain-text password storage (no hashing)
- SQL injection risks (raw string queries)
- Inline PHP mixed with HTML everywhere
- Minimal validation / error handling
- Framesets + iframes for layout/navigation

Still… it worked, and it taught me a lot. That’s the point of keeping it 💛

---

## Disclaimer

⚠️ This repository is **not production-ready** and is published for educational / archival purposes only.

---

## Personal note

If you’re reading this: this project is a 'before' snapshot and a reminder that improvement comes from building, breaking, learning, and repeating.


