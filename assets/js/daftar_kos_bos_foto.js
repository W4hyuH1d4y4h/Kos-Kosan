document.addEventListener("DOMContentLoaded", function () {
	// // This is our array to hold the kos photo URLs
	// let kosPhotos = [];
	// // ...
	// // Function to handle the image upload and storing the URL
	// var uppyKos = Uppy.Core({
	// 	autoProceed: false,
	// })
	// 	.use(Uppy.Dashboard, {
	// 		target: "#drag-drop-foto",
	// 		inline: true,
	// 	})
	// 	.use(Uppy.XHRUpload, {
	// 		endpoint: "http://localhost/kos-kosan/user/daftar_kos/image_kos",
	// 		formData: true,
	// 		fieldName: "photos",
	// 		headers: {
	// 			"User-Id": "user_id_here",
	// 		},
	// 	});
	// uppyKos.on("complete", (result) => {
	// 	console.log(result);
	// 	console.log(
	// 		"Upload complete! We’ve uploaded these files:",
	// 		result.successful
	// 	);
	// 	if (result.successful.length > 0) {
	// 		// Add the uploaded photo URLs to kosPhotos array
	// 		kosPhotos.push(result.successful[result.successful.length - 1].uploadURL);
	// 		console.log("Kos photos array:", kosPhotos);
	// 	} else {
	// 		// Handle the case where some files did not upload successfully
	// 		alert("Some files did not upload successfully.");
	// 	}
	// });
});
