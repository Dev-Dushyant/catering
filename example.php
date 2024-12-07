<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Item Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Additional Styling -->
    <style>
        /* Apply background image */
        body {
            background-image: url('https://img.freepik.com/free-photo/vintage-old-rustic-cutlery-dark_1220-4886.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #f0f0f0;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form container styling */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        /* Hover effect on form container */
        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        /* Title text with 3D effect */
        .form-container h2 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center;
            color: #343a40;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* 3D text shadow */
        }

        /* Label styling with 3D effect */
        label {
            font-weight: bold;
            color: #495057;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
        }

        /* Input and Select styling with 3D effect */
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ced4da;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Subtle 3D effect */
        }

        /* Focused state with stronger 3D effect */
        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.25);
        }

        /* Button styling with 3D effect */
        .btn-success {
            background: linear-gradient(135deg, #28a745, #218838);
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1); /* Subtle 3D effect */
        }

        /* Hover effect for button with 3D scale */
        .btn-success:hover {
            background: linear-gradient(135deg, #218838, #28a745);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Deeper 3D effect */
        }

        /* Active state for button with a pressed effect */
        .btn-success:active {
            transform: scale(0.98); /* Button press effect */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Pressed shadow */
        }

        /* Multi-select customization */
        select.form-select {
            height: auto;
            max-height: 150px;
            overflow-y: auto;
        }

        /* Margin for form fields */
        .mb-3 {
            margin-bottom: 20px;
        }

        /* Small text for instructions */
        .form-container small {
            font-size: 12px;
            color: #6c757d;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }

            .btn-success {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Menu Item</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="item">Item Name</label>
                <input type="text" class="form-control" placeholder="Enter item name" required name="item" id="item">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" rows="5" placeholder="Enter Description" name="description" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label>Select Category <small>(Hold ctrl button for multiple selection)</small></label>
                <select name="category[]" class="form-select" multiple>
                    <option value="Starter">Starter</option>
                    <option value="Main Course">Main Course</option>
                    <option value="Fast Food">Fast Food</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Sweets">Sweets</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (Optional for Bootstrap functionality like Modal, Tooltip, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
