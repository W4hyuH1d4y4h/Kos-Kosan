document.addEventListener("DOMContentLoaded", function () {
	// Store form data in an object
	let formData = {};
	/**
	 * Define a function to navigate betweens form steps.
	 * It accepts one parameter. That is - step number.
	 */
	const navigateToFormStep = (stepNumber) => {
		/**
		 * Hide all form steps.
		 */
		document.querySelectorAll(".form-step").forEach((formStepElement) => {
			formStepElement.classList.add("d-none");
		});
		/**
		 * Mark all form steps as unfinished.
		 */
		document
			.querySelectorAll(".form-stepper-list")
			.forEach((formStepHeader) => {
				formStepHeader.classList.add("form-stepper-unfinished");
				formStepHeader.classList.remove(
					"form-stepper-active",
					"form-stepper-completed"
				);
			});
		/**
		 * Show the current form step (as passed to the function).
		 */
		document.querySelector("#step-" + stepNumber).classList.remove("d-none");
		/**
		 * Select the form step circle (progress bar).
		 */
		const formStepCircle = document.querySelector(
			'li[step="' + stepNumber + '"]'
		);
		/**
		 * Mark the current form step as active.
		 */
		formStepCircle.classList.remove(
			"form-stepper-unfinished",
			"form-stepper-completed"
		);
		formStepCircle.classList.add("form-stepper-active");
		/**
		 * Loop through each form step circles.
		 * This loop will continue up to the current step number.
		 * Example: If the current step is 3,
		 * then the loop will perform operations for step 1 and 2.
		 */
		for (let index = 0; index < stepNumber; index++) {
			/**
			 * Select the form step circle (progress bar).
			 */
			const formStepCircle = document.querySelector('li[step="' + index + '"]');
			/**
			 * Check if the element exist. If yes, then proceed.
			 */
			if (formStepCircle) {
				/**
				 * Mark the form step as completed.
				 */
				formStepCircle.classList.remove(
					"form-stepper-unfinished",
					"form-stepper-active"
				);
				formStepCircle.classList.add("form-stepper-completed");
			}
		}
	};
	/**
	 * Select all form navigation buttons, and loop through them.
	 */
	document
		.querySelectorAll(".btn-navigate-form-step")
		.forEach((formNavigationBtn) => {
			/**
			 * Add a click event listener to the button.
			 */
			formNavigationBtn.addEventListener("click", () => {
				/**
				 * Get the value of the step.
				 */
				const stepNumber = parseInt(
					formNavigationBtn.getAttribute("step_number")
				);
				if (formNavigationBtn.classList.contains("button-next")) {
					// Get all input values in the current section
					let stepData = $(`#step-${stepNumber - 1} :input`).serializeArray();
					// Store data
					formData[`step${stepNumber - 1}`] = stepData;
				}
				/**
				 * Call the function to navigate to the target form step.
				 */
				navigateToFormStep(stepNumber);
				console.log(formData);
			});
		});
	// This is our array to hold the room details
	let roomDetails = [];

	// This is a function that will add a room to the roomDetails array
	const addRoomDetails = (name, pricePerMonth, pricePerYear, imageUrl) => {
		roomDetails.push({
			name,
			pricePerMonth,
			pricePerYear,
			imageUrl,
		});
	};

	// This is a function that will update the preview when a new room is added
	const updateRoomPreview = (room) => {
		// Select the preview section
		const previewSection = document.querySelector(".container2");

		// Create a new div for the room preview
		const newRoomDiv = document.createElement("div");
		newRoomDiv.classList.add("room-preview");

		// Fill the new div with the room details
		newRoomDiv.innerHTML = `
        <div class="">
        <div class="max-w-sm w-full lg:w-1/3 py-6 px-3">
            <div class="bg-white shadow-xl rounded overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url(${room.imageUrl});">
                </div>
                <div class="p-4">
                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">
                    ${room.name}</p>
                    <p class="text-3xl text-gray-900">Rp${room.pricePerMonth}<span style="font-size: 15px;">/bulan</span> </p>
                    <p class="text-3xl text-gray-900">Rp${room.pricePerYear}<span style="font-size: 15px;">/tahun</span> </p>
                    <div class="border-t border-gray-300 text-gray-700">
                        <!-- untuk tombol action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;

		// Append the new room div to the preview section
		previewSection.appendChild(newRoomDiv);
	};

	// Get the form elements
	const roomNameInput = document.querySelector('input[name="nama_kamar"]');
	const pricePerMonthInput = document.querySelector(
		'input[name="Harga_Bulan"]'
	);
	const pricePerYearInput = document.querySelector('input[name="Harga_Tahun"]'); // name corrected, make sure to update this in your form
	const addRoomButton = document.getElementById("tambahkamar");
	// Disable the "Tambah Kamar" button initially
	addRoomButton.disabled = true;

	var uppy = Uppy.Core({
		autoProceed: false,
	})
		.use(Uppy.Dashboard, {
			target: "#drag-drop-area",
			inline: true,
		})
		.use(Uppy.XHRUpload, {
			endpoint: "http://localhost/kos-kosan/user/daftar_kos/temporary_kos",
			formData: true,
			fieldName: "photos",
			headers: {
				"User-Id": "user_id_here",
			},
		});

	let lastUploadedImg = "";

	uppy.on("file-added", (file) => {
		console.log("File added, starting upload...");
		uppy.upload().catch((error) => console.error("Upload failed:", error));
	});

	uppy.on("upload", () => {
		console.log("Upload started...");
	});

	uppy.on("complete", (result) => {
		console.log(result);
		console.log(
			"Upload complete! We’ve uploaded these files:",
			result.successful
		);
		if (result.successful.length > 0) {
			lastUploadedImg =
				result.successful[result.successful.length - 1].uploadURL;
			console.log("Last uploaded image URL:", lastUploadedImg);

			// Enable the "Tambah Kamar" button once the upload is successful
			addRoomButton.disabled = false;
		} else {
			// Handle the case where some files did not upload successfully
			alert("Some files did not upload successfully.");
		}
	});

	// Prevent the form submission
	$("#myForm").on("submit", function (e) {
		e.preventDefault();
	});

	// When the "Tambah Kamar" button is clicked, we add the room details to our array and update the preview
	addRoomButton.addEventListener("click", function (e) {
		// Just prevent the form from submitting. The form submit handler will take care of the rest.
		e.preventDefault();
		// Check if the image upload is complete
		if (!lastUploadedImg) {
			console.log("lastUploadedImg is still empty");
			alert("Please wait for the image upload to complete.");
			return;
		}
		// Add the current room details to the array
		addRoomDetails(
			roomNameInput.value,
			pricePerMonthInput.value,
			pricePerYearInput.value,
			lastUploadedImg
		);

		// Update the preview with the latest room
		updateRoomPreview(roomDetails[roomDetails.length - 1]);

		// Reset lastUploadedImg to ensure new image is uploaded before the next room is added
		lastUploadedImg = "";

		// Disable the "Tambah Kamar" button until a new image is uploaded
		addRoomButton.disabled = true;

		console.log(roomDetails);
	});

	// This is our array to hold the kos photo URLs
	let kosPhotos = [];

	// ...

	// Function to handle the image upload and storing the URL
	var uppyKos = Uppy.Core({
		autoProceed: false,
	})
		.use(Uppy.Dashboard, {
			target: "#drag-drop-foto",
			inline: true,
		})
		.use(Uppy.XHRUpload, {
			endpoint: "http://localhost/kos-kosan/user/daftar_kos/image_kos",
			formData: true,
			fieldName: "photos",
			headers: {
				"User-Id": "user_id_here",
			},
		});

	uppyKos.on("complete", (result) => {
		console.log(result);
		console.log(
			"Upload complete! We’ve uploaded these files:",
			result.successful
		);
		if (result.successful.length > 0) {
			// Add the uploaded photo URLs to kosPhotos array
			kosPhotos.push(result.successful[result.successful.length - 1].uploadURL);
			console.log("Kos photos array:", kosPhotos);
		} else {
			// Handle the case where some files did not upload successfully
			alert("Some files did not upload successfully.");
		}
	});

	$("#cekValid").on("click", function (e) {
		e.preventDefault();

		// Get data from the main form
		const mainFormData = $(this).serializeArray();

		// Combine mainFormData with roomDetails and kosPhotos
		const combinedData = {
			...mainFormData,
			step4: roomDetails
				.map((room) => {
					return [
						{
							name: "nama_kamar",
							value: room.name,
						},
						{
							name: "Harga_Bulan",
							value: room.pricePerMonth,
						},
						{
							name: "Harga_Tahun",
							value: room.pricePerYear,
						},
						{
							name: "image_url",
							value: room.imageUrl,
						},
					];
				})
				.flat(),
			step5: kosPhotos.map((photoUrl) => {
				return {
					name: "kos_photo",
					value: photoUrl,
				};
			}),
		};

		// Send combinedData to server...
		console.log(combinedData);
	});
});
