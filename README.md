# Playing Cards Distribution – Tyrell Systems Technical Assessment

This repository contains my solution for the **Tyrell Systems Programming Test (Playing Cards)**.  
The task is to distribute a standard 52-card deck to **N people**, following strict rules for validation, output format, and error handling.

I used the following languages as requested by the assessment:
- **PHP** (backend processing)
- **JavaScript**
- **jQuery**  
These cover both backend and frontend requirements.

All code is written in **UTF-8** encoding, and line breaks follow **LF (Unix)** format, as required.

---

# 📌 Assessment Requirements Summary

### ✔ Deck Rules
- Total cards = **52**
- 4 suits:
  - **S** = Spade  
  - **H** = Heart  
  - **D** = Diamond  
  - **C** = Club
- Ranks:
  - `1 = A`
  - `2–9 = same number`
  - `10 = X`
  - `11 = J`
  - `12 = Q`
  - `13 = K`

Each card is represented as:

<Suit>-<RankSymbol>
Example:
H-Q, S-A, D-5


---

# ✔ Input Rules
Input is received via GET parameter:
deal.php?people=<number>

Rules:
- Must be numeric  
- Must be greater than 0  
- If invalid → output **exactly**:
Input value does not exist or value is invalid

Values **greater than 52 are allowed**  
(Some people will receive zero cards — not an error.)

---

# ✔ Distribution Rules
- Shuffle deck randomly  
- Distribute 1 card at a time (round-robin)  
- Stop after all 52 cards are assigned  
- Output must show 1 row per person  
- Use **LF** line breaks only

---

# ❗ Irregularity Rules
If any unexpected issue occurs, the program must output:
Irregularity occurred

and stop immediately.

---

# 🗂 Folder Contents
play-card-assessment/
├── deal.php
├── index.html
└── README.md


---

# ▶ How to Run the Project

## Option 1 — PHP Built-in Server
php -S localhost:8000

Open:
http://localhost:8000/index.html


## Option 2 — XAMPP / WAMP / MAMP
Place the folder in:
htdocs/play-card-assessment/


Open:
http://localhost/play-card-assessment/index.html


---

# 🧪 Testing Instructions

## ✔ Valid Tests
- `?people=1` → 1 line, 52 cards  
- `?people=2` → 26 cards each  
- `?people=4` → 13 cards each  
- `?people=52` → 1 card per person  
- `?people=100` → 100 lines (52 cards + 48 empty)

## ✔ Invalid Tests
Must output:
Input value does not exist or value is invalid


Cases:
- empty  
- non-numeric  
- negative  
- zero  
- missing parameter  

## ✔ Irregularity Tests (during development)
- remove 1 card  
- break deck size  
- throw exception  

Expected:
Irregularity occurred


---

# 📘 How the Program Works
1. Read input  
2. Validate value  
3. Build 52-card deck  
4. Shuffle  
5. Distribute round-robin  
6. Validate total = 52  
7. Output rows  

---

# 🤖 AI Usage Declaration
As required by the assessment, I used ChatGPT only for:
- README structure  
- Logic validation  
- Test case ideas  

All code (`index.php` and `index.html`) was written manually by me.

---

# ⏱ Time Spent
**2 hours**

---

# ✔ Final Notes
- Output matches strict formatting rules  
- Uses PHP + JavaScript + jQuery  
- Fully tested and ready for submission  

