<x-mail::message>
# New Contact Inquiry

You have received a new inquiry from the website contact form.

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Phone:** {{ $data['phone'] ?? 'N/A' }}

**Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
