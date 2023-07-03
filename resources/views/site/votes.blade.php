
<html dir="rtl">
    <head>  
        <link rel="stylesheet" href={{ asset('site_files/css/vote/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('site_files/css/vote/all.min.css') }}>
        <link rel="stylesheet" href={{ asset('site_files/css/vote/main.css') }}>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap');
        </style>
    </head>
    <body>
        <section class="container-fluid">
            <form action="{{ route('votes/store') }}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li>
                                <span>سياسات القبول والتحويلات :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Admission_and_transfer" value="1" id="1">
                        <label for="1">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Admission_and_transfer" value="2" id="2">
                        <label for="2">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Admission_and_transfer" value="3" id="3">
                        <label for="3">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Admission_and_transfer" value="4" id="4">
                        <label for="4">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Admission_and_transfer" value="5" id="5">
                        <label for="5">غير راضى جدا</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الالتزام بمحتوى ومواعيد المحاضرات :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Commitment_to_the" value="1" id="6">
                        <label for="6">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Commitment_to_the" value="2" id="7">
                        <label for="7">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Commitment_to_the" value="3" id="8">
                        <label for="8">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Commitment_to_the" value="4" id="9">
                        <label for="9">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Commitment_to_the" value="5" id="10">
                        <label for="10">غير راضى جدا</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>طرق التدريس وتكنولوجيا التعليم :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_methods_and" value="1" id="11">
                        <label for="11">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_methods_and" value="2" id="12">
                        <label for="12">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_methods_and" value="3" id="13">
                        <label for="13">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_methods_and" value="4" id="14">
                        <label for="14">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Teaching_methods_and" value="5" id="15">
                        <label for="15">غير راضى جدا</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>اسلوب معامله اعضاء هيئه التدريس ومعاونيهم :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Method_of_treatment" value="1" id="16">
                        <label for="16">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Method_of_treatment" value="2" id="17">
                        <label for="17">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Method_of_treatment" value="3" id="18">
                        <label for="18">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Method_of_treatment" value="4" id="19">
                        <label for="19">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Method_of_treatment" value="5" id="20">
                        <label for="20">غير راضى جدا</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>البيئه8 التعليميه للبرنامج :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="program_educational" value="1" id="21">
                        <label for="21">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="program_educational" value="2" id="22">
                        <label for="22">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="program_educational" value="3" id="23">
                        <label for="23">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="program_educational" value="4" id="24">
                        <label for="24">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="program_educational" value="5" id="25">
                        <label for="25">غير راضى جدا</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>التدريب الميدانى :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Field_Training" value="1" id="26">
                        <label for="26">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Field_Training" value="2" id="27">
                        <label for="27">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Field_Training" value="3" id="28">
                        <label for="28">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Field_Training" value="4" id="29">
                        <label for="29">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Field_Training" value="5" id="30">
                        <label for="30">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>المختبرات والمعامل وقاعات التدريس :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Laboratories_lab" value="1" id="31">
                        <label for="31">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Laboratories_lab" value="2" id="32">
                        <label for="32">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Laboratories_lab" value="3" id="33">
                        <label for="33">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Laboratories_lab" value="4" id="34">
                        <label for="34">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Laboratories_lab" value="5" id="35">
                        <label for="35">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>اساليب التعليم والتعلم وتوجهات وفاعليه التعلم الذاتى :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_and_learning" value="1" id="41">
                        <label for="41">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_and_learning" value="2" id="42">
                        <label for="42">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_and_learning" value="3" id="43">
                        <label for="43">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Teaching_and_learning" value="4" id="44">
                        <label for="44">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Teaching_and_learning" value="5" id="45">
                        <label for="45">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الارشاد fالاكاديمى :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Academic_Advising" value="1" id="46">
                        <label for="46">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Academic_Advising" value="2" id="47">
                        <label for="47">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Academic_Advising" value="3" id="48">
                        <label for="48">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Academic_Advising" value="4" id="49">
                        <label for="49">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Academic_Advising" value="5" id="50">
                        <label for="50">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الاعمال الفصليه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Quarterly_business" value="1" id="51">
                        <label for="51">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Quarterly_business" value="2" id="52">
                        <label for="52">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Quarterly_business" value="3" id="53">
                        <label for="53">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Quarterly_business" value="4" id="54">
                        <label for="54">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Quarterly_business" value="5" id="55">
                        <label for="55">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الدروس الخصوصيه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Private_lessons" value="1" id="56">
                        <label for="56">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Private_lessons" value="2" id="57">
                        <label for="57">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Private_lessons" value="3" id="58">
                        <label for="58">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Private_lessons" value="4" id="59">
                        <label for="59">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Private_lessons" value="5" id="60">
                        <label for="60">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الكتاب الجامعى (ان وجد) :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="University_book" value="1" id="61">
                        <label for="61">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="University_book" value="2" id="62">
                        <label for="62">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="University_book" value="3" id="63">
                        <label for="63">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="University_book" value="4" id="64">
                        <label for="64">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="University_book" value="5" id="65">
                        <label for="65">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الكثافه العدديه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="numerical_density" value="1" id="66">
                        <label for="66">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="numerical_density" value="2" id="67">
                        <label for="67">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="numerical_density" value="3" id="68">
                        <label for="68">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="numerical_density" value="4" id="69">
                        <label for="69">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="numerical_density" value="5" id="70">
                        <label for="70">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الاساليب المستخدمه فى تقويم مخرجات التعليم والتعلم المستهدفه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="The_methods_used_i" value="1" id="71">
                        <label for="71">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="The_methods_used_i" value="2" id="72">
                        <label for="72">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="The_methods_used_i" value="3" id="73">
                        <label for="73">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="The_methods_used_i" value="4" id="74">
                        <label for="74">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="The_methods_used_i" value="5" id="75">
                        <label for="75">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الانشطه الطلابيه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Student_activities" value="1" id="76">
                        <label for="76">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Student_activities" value="2" id="77">
                        <label for="77">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Student_activities" value="3" id="78">
                        <label for="78">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Student_activities" value="4" id="79">
                        <label for="79">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Student_activities" value="5" id="80">
                        <label for="80">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>المنح الدراسيه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Scholarships" value="1" id="86">
                        <label for="86">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Scholarships" value="2" id="87">
                        <label for="87">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Scholarships" value="3" id="88">
                        <label for="88">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Scholarships" value="4" id="89">
                        <label for="89">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Scholarships" value="5" id="90">
                        <label for="90">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>تشجيع التفوق والتميز :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Encouraging_excell" value="1" id="91">
                        <label for="91">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Encouraging_excell" value="2" id="92">
                        <label for="92">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Encouraging_excell" value="3" id="93">
                        <label for="93">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Encouraging_excell" value="4" id="94">
                        <label for="94">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Encouraging_excell" value="5" id="95">
                        <label for="95">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>اتاحه المعلومات :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Availability_of_infor" value="1" id="96">
                        <label for="96">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Availability_of_infor" value="2" id="97">
                        <label for="97">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Availability_of_infor" value="3" id="98">
                        <label for="98">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Availability_of_infor" value="4" id="99">
                        <label for="99">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Availability_of_infor" value="5" id="100">
                        <label for="100">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>سياسات عدم التمييز والعداله :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Non_discrimination" value="1" id="101">
                        <label for="101">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Non_discrimination" value="2" id="102">
                        <label for="102">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Non_discrimination" value="3" id="103">
                        <label for="103">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Non_discrimination" value="4" id="104">
                        <label for="104">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Non_discrimination" value="5" id="105">
                        <label for="105">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>التسهيلات المتاحه بالمكتبه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="The_facilities_avai" value="1" id="106">
                        <label for="106">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="The_facilities_avai" value="2" id="107">
                        <label for="107">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="The_facilities_avai" value="3" id="108">
                        <label for="108">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="The_facilities_avai" value="4" id="109">
                        <label for="109">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="The_facilities_avai" value="5" id="110">
                        <label for="110">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>فاعليه المشاركه فى اللجان والانشطه الخاصه بالبرنامج :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Effective_participation_in" value="1" id="111">
                        <label for="111">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Effective_participation_in" value="2" id="112">
                        <label for="112">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Effective_participation_in" value="3" id="113">
                        <label for="113">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Effective_participation_in" value="4" id="114">
                        <label for="114">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Effective_participation_in" value="5" id="115">
                        <label for="115">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>مصداقيه اداره البرنامج :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Program_management_credib" value="1" id="116">
                        <label for="116">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Program_management_credib" value="2" id="117">
                        <label for="117">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Program_management_credib" value="3" id="118">
                        <label for="118">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Program_management_credib" value="4" id="119">
                        <label for="119">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Program_management_credib" value="5" id="120">
                        <label for="120">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الشكاوى والمقترحات :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Complaints_and_suggesti" value="1" id="121">
                        <label for="121">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Complaints_and_suggesti" value="2" id="122">
                        <label for="122">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Complaints_and_suggesti" value="3" id="123">
                        <label for="123">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Complaints_and_suggesti" value="4" id="124">
                        <label for="124">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Complaints_and_suggesti" value="5" id="125">
                        <label for="125">غير راضى جدا</label>
                    </div>
                </div> 
  
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الخدمات المقدمه للمتعثرين دراسيا :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to_stu" value="1" id="126">
                        <label for="126">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to_stu" value="2" id="127">
                        <label for="127">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to_stu" value="3" id="128">
                        <label for="128">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to_stu" value="4" id="129">
                        <label for="129">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Services_provided_to_stu" value="5" id="130">
                        <label for="130">غير راضى جدا</label>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <span>الخدمات المقدمه لذوى الاحتياجات الخاصه :</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to" value="1" id="131">
                        <label for="131">راضى</label>
                    </div>    
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to" value="2" id="132">
                        <label for="132">راضى جدا</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to" value="3" id="133">
                        <label for="133">محايد</label>
                    </div>
                        
                    <div class="col-md-1">
                        <input type="radio" name="Services_provided_to" value="4" id="134">
                        <label for="134">غير راضى</label>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" name="Services_provided_to" value="5" id="135">
                        <label for="135">غير راضى جدا</label>
                    </div>
                </div> 
            
                <div class=" d-flex justify-content-center align-items-center">
                    {{-- <button type="submit" class="btn mt-5">Submit</button> --}}
                    <input type="submit" value="Submit">
                </div> 
            </form>
      </section>
       <script src="{{ asset('site_files/js/vote/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('site_files/js/vote/jquery-3.6.0.js') }}"></script>
       <script src="{{ asset('site_files/js/vote/main.js') }}"></script>
    </body> 
</html>







