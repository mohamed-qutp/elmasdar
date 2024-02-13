@if(Lang::locale() == 'ar')
<p style="text-align:right;"><span>{{$name}} </span>:
اسم العميل  </p>
<p style="text-align:right;">
رقم الجوال : {{$phone}} </p>
<p style="text-align:right;">{{$address_ar}} :
العنوان</p>
<p style="text-align:right;">{{ $subject_ar}}</p>
<p style="text-align:right;">...<span>مع الشكر </span><br>
<!-- <span style="font-weight:bold; ">ا</span>   </p><br>  -->
@else 
Email From : {{$name}}<br><br>
Phone : {{$phone}} <br><br>
Service : {{$service}} <br><br>
State : {{$state}} <br><br>
City : {{$city}} <br><br>
ZIP : {{$zip}} <br><br>
<p style="text-align:left;"><span>Thanks...</span><br>
<!-- <span style="font-weight:bold; ">Safa Taiba</span>   </p><br>  -->
@endif
