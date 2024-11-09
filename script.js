function changeBackgroundColor() {
    const colors = ["#f39c12", "#e74c3c", "#9b59b6", "#3498db", "#1abc9c"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.body.style.backgroundColor = randomColor;
}