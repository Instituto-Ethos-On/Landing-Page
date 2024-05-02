document.addEventListener("DOMContentLoaded", async() => {
    await new Promise(r => setTimeout(r, 10));
    const first_btn = document.getElementById("first-btn-dropdown");
    first_btn.click()
})