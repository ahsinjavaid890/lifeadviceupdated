@php
   $emailtemplate = DB::table('site_settings')->where('smallname' , 'lifeadvice')->first()->email_template;
@endphp


{{ DB::table('email_templates')->where('id' , $emailtemplate)->first()->purchase_email }}