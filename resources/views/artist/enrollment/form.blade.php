@extends("layouts.app")

@section("title", "Artist Enrollment Form")

@section("content")

    <x-form.wrapper>

        <x-form.header> Enroll As An Artist </x-form.header>
        <x-form.divider />

        <x-form.subheader> Personal Details </x-form.sub_header>       

        <x-form.input name="name" label="Your Name" placeholder="e.g. John" />
        <x-form.input name="father_name" label="Your Father's Name" placeholder="e.g. Doe" />
        <x-form.input name="nic_number" label="Your NIC Number" placeholder="XXXXX-XXXXXXX-X" inputmode="numeric" />
        <x-form.textarea name="address" label="Your Address" placeholder="House No. 123, Street 4/5
Sector A-06/7
XYZ XXXXX"  />
        <x-form.select name="gender" label="Your Gender" :options="[
            'male' => 'Male',
            'female' => 'Female'
        ]" />
        <x-form.input name="date_of_birth" label="Your Date of Birth" placeholder="dd-mm-yyyy" class="datepicker" />
        
        <x-form.subheader class="mt-9"> Professional Details </x-form.sub_header>       

        <x-form.textarea name="educational_qualifications" label="Your Educational Qualification(s)" rows="5" placeholder="List your 
 Degrees, 
 Certifications
 Or Institutions attended"  />
        <x-form.input name="present_job" label="Your Present Job / Designation" placeholder="Job/Designation @ Company" />
        <x-form.textarea name="experience" label="Your Experiences(s)" rows="4" placeholder="Briefly describe your 
 Professional experience, 
 Past roles
 Or Freelance work"  />
  
        <x-form.subheader class="mt-9"> Social(s) </x-form.sub_header>       

        <x-form.input name="facebook" label="Facebook Profile" placeholder="https://facebook.com/yourname" />
        <x-form.input name="instagram" label="Instagram Profile" placeholder="https://instagram.com/yourhandle" />

        <x-form.button> Apply </x-form.button>
        <x-form.divider />

        <x-form.helper text="*Your enrollment will be subject to review, " link="{{ route('artist.enrollment.terms') }}" linkText="Learn more." />            

   </x-form.wrapper>

@endsection

