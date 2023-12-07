
<x-mail::message>
# Someone Has sent you this message from your website contact form.

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Phone:** {{ $data['phone'] }}

**Subject:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}
</x-mail::message>
