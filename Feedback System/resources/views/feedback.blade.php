<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <h2 style="text-align: center; color: #333;">Feedback Form</h2>

        @if (session('success'))
            <div style="padding: 10px; color: green; text-align: center; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('feedback.store') }}" method="POST" style="display: flex; flex-direction: column;">
            @csrf

            <!-- Email -->
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
                <input type="email" name="email" id="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required>
                @error('email')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feedback -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Feedback</label>
                <label style="display: block; margin-bottom: 5px;"><input type="radio" name="feedback" value="excellent" required> Excellent</label>
                <label style="display: block; margin-bottom: 5px;"><input type="radio" name="feedback" value="good" required> Good</label>
                <label style="display: block; margin-bottom: 5px;"><input type="radio" name="feedback" value="poor" required> Poor</label>
                @error('feedback')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Star Rating -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Rate Us</label>
                <div style="display: flex; justify-content: space-around; max-width: 200px; margin: 0 auto;">
                    <label><input type="radio" name="stars" value="5"> <i class="fas fa-star" style="color: gold;"></i></label>
                    <label><input type="radio" name="stars" value="4"> <i class="fas fa-star" style="color: gold;"></i></label>
                    <label><input type="radio" name="stars" value="3"> <i class="fas fa-star" style="color: gold;"></i></label>
                    <label><input type="radio" name="stars" value="2"> <i class="fas fa-star" style="color: gold;"></i></label>
                    <label><input type="radio" name="stars" value="1"> <i class="fas fa-star" style="color: gold;"></i></label>
                </div>
                @error('stars')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Message -->
            <div style="margin-bottom: 15px;">
                <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Message</label>
                <textarea name="message" id="message" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" rows="5" required></textarea>
                @error('message')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Submit Feedback
            </button>
        </form>
    </div>

</body>
</html>
