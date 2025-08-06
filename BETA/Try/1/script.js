function openModal(id) {
  const modal = document.getElementById(id);
  modal.style.display = "flex";
  setTimeout(() => modal.classList.add('show'), 10);
}
function closeModal(id) {
  const modal = document.getElementById(id);
  modal.classList.remove('show');
  setTimeout(() => { modal.style.display = "none"; }, 400);
}
window.onclick = function(event) {
  document.querySelectorAll('.profile-modal').forEach(function(modal) {
    if (event.target === modal) closeModal(modal.id);
  });
};
// Optional: ESC to close modal
window.addEventListener('keydown', function(e) {
  if (e.key === "Escape") {
    document.querySelectorAll('.profile-modal.show').forEach(function(modal) {
      closeModal(modal.id);
    });
  }
});
