document.addEventListener("DOMContentLoaded", async() => {
    await new Promise(r => setTimeout(r, 100));
    let first_btn = document.getElementById("first-btn-dropdown");
    first_btn.click()
})