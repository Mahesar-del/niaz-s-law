<h2>New Contact Inquiry</h2>
<p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</p>
<p><strong>Practice Area:</strong> {{ $data['practice'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ nl2br(e($data['message'])) }}</p>
