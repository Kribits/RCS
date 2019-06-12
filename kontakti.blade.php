@extends('layouts.main')

@section('content')
<!-- Karte -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2176.2154679003215!2d24.04853091551287!3d56.945109606871796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed005a7a9e2ed%3A0x414cda2f6cd7f60d!2sGregora+iela+8%2C+Kurzemes+rajons%2C+R%C4%ABga%2C+LV-1083!5e0!3m2!1sen!2slv!4v1559678766910!5m2!1sen!2slv"
                width="600" height="432" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- /Karte -->

        <!-- Forma -->
        <div class="col-sm-6">
            <div class="bg-light my-0 py-4">

                <form action="#" method="get">
                    <div class="form">
                        <div class="form-group col-md-8">
                            <label for="inputName"></label>
                            <input type="text" class="form-control" id="inputName" placeholder="Vārds, Uzvārds" data-validation="length" data-validation-length="6-30" data-validation-error-msg="Simbolu skaits ir mazāks nekā 6">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputEmail4"></label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="E-pasts" data-validation="email" data-validation-error-msg="Jūs neesat norādījis pareizu e-pasta adresi">
                        </div>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="inputText"></label>
                        <textarea class="form-control" id="inputText" placeholder="Tavs jautājums:" rows="3" data-validation="length" data-validation-length="10-100" data-validation-error-msg="Simbolu skaits ir mazāks nekā 10"></textarea>
                    </div>
                    <div class="form-group col-md-8 my-3 py-4">
                        <button type="submit" class="btn btn-warning">Nosūtīt</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Forma -->
    <!-- Info par lapas īpašnieku -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="my-2 py-3">
                    <h3>Šis un tas par mani</h3>
                </div>
            </div>
        </div>
        <ul class="list-unstyled">
            <li class="media">
                <img src="https://picsum.photos/id/1027/100/100" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Kas es esmu?</h5>
                    Mans vārds ir Kristīne. Esmu dzimusi rīdziniece, bet jau vairāk kā piecpadsmit gadus dzīvoju Ikšķilē (ļoti jaukā, zaļā un ģimenēm draudzīgā pilsētā, aptuveni 30km attālumā no Rīgas). Mani hobiji ir grāmatu lasīšana un dziedāšana. Ļoti atbalstu un labprāt piekopju aktīvu dzīvesveidu gan vingrojot, gan braucot ar riteni un reizēm arī skrienot. 
                </div>
            </li>
            <li class="media my-4">
                <img src="https://picsum.photos/id/1073/100/100" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Ko es daru?</h5>
                    Šobrīd ikdienā es galvenokārt esmu mamma, jo vēl līdz šī gada septembrim skaitos bērna kopšanas atvaļinājumā. Rudenī plānoju atsākt darba gaitas SIA Mobilly, kur jau kādus septiņus gadus strādāju klientu servisā. Ceru, ka radīšu iespēju pārkvalificēties un turpināt apgūt zināšanas web izstrādē.
                </div>
            </li>
            <li class="media">
                <img src="https://picsum.photos/id/0/100/100" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Kā es nokļuvu šeit?</h5>
                    Jau ilgāku laiku manī ir briedusi doma par to, ka vēlos pamainīt savu ikdienu un atrast iespēju kā likt vienādības zīmi starp darbu un hobiju. Meklējot kaut ko aizraujošu un oriģinālu šī gada sākumā nonācu pie domas par programmēšanu. IT nozare ir gana plaša un ar lielu potenciālu arī nākotnē, tā nu izlēmu, ka gribu pamēģināt iet šo ceļu. Pagaidām ir skaidrs, ka tas nav viegls, bet ceru nepadoties pie pirmajiem pārbaudījumiem un arī pēc kursiem turpināt praktizēties.
                </div>
            </li>
        </ul>
    </div>
    <!-- /Info par lapas īpašnieku -->
    @endsection