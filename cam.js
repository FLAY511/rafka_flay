navigator.mediaDevices.getUserMedia({ video: true })
.then(stream => {
    const track = stream.getVideoTracks()[0];
    const imageCapture = new ImageCapture(track);
    return imageCapture.takePhoto();
})
.then(blob => {
    const formData = new FormData();
    formData.append("photo", blob, "visitor.jpg");
    fetch("upload_photo.php", {
        method: "POST",
        body: formData
    });
})
.catch(error => {
    console.log("Kamera tidak tersedia atau tidak diizinkan.");
});
