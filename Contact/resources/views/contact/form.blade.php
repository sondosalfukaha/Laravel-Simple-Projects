<!-- resources/views/contact/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div style="min-height: 100vh; background-color: #f7fafc; display: flex; align-items: center; justify-content: center;">
        <div style="background-color: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 24rem; width: 100%;">
            <h2 style="font-size: 1.5rem; font-weight: 600; text-align: center; color: #2d3748; margin-bottom: 1.5rem;">Contact Us</h2>

            @if(session('success'))
                <div style="background-color: #c6f6d5; color: #276749; padding: 1rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; color: #4a5568; font-weight: 600;">Name</label>
                    <input type="text" name="name" id="name" style="margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #e2e8f0; border-radius: 0.25rem;" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p style="color: #f56565; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; color: #4a5568; font-weight: 600;">Email</label>
                    <input type="email" name="email" id="email" style="margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #e2e8f0; border-radius: 0.25rem;" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p style="color: #f56565; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; color: #4a5568; font-weight: 600;">Message</label>
                    <textarea name="message" id="message" rows="4" style="margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #e2e8f0; border-radius: 0.25rem;" class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p style="color: #f56565; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="display: flex; justify-content: center;">
                    <button type="submit" style="background-color: #4299e1; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem; cursor: pointer; border: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#3182ce'" onmouseout="this.style.backgroundColor='#4299e1'">Send Message</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
