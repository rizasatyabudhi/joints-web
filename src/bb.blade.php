@extends('user.layout')
@section('title', 'Pengisian Data TIM')
@section('fillteamdata', 'active')
@section('subtitle', 'Selamat datang di JOINTS 2018. Silahkan isi data Tim terlebih dahulu.')

@section('content')

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('users.fillteamdata.submit') }}">
    {{ csrf_field() }}
    <div class="columns">
      <!-- Data Tim -->
      <div class="column">
        <div class="box">
          <section>
            <h6 class="title is-6 has-text-centered">Pengisian Data Tim</h6>
            <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="label">Nama Tim</label>
              <div class="control">
              <input class="input is-medium" id="name" name="name" type="text" style="background-image: url({{ asset('images/index/icon/group.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ Auth::user()->name }}" readonly>
              @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
              </div>
            </div>

            @if(Auth::user()->id_event == 1)
            <div class="field{{ $errors->has('institution') ? ' has-error' : '' }}">
              <label class="label ">Asal Instansi</label>
              <div class="control ">
               <input class="input is-medium" id="institution" name="institution" type="text" style="background-image: url({{ asset('images/index/icon/graduation.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ old('institution') }}" placeholder="Masukkan asal Institusi" required>
              @if ($errors->has('institution'))
              <span class="help-block">
                <strong>{{ $errors->first('institution') }}</strong>
              </span>
              @endif
              </div>
            </div>
            @endif

            <div class="field">
              <label class="label">Cabang Kompetisi</label>
              <div class="control">
                <div class="select is-fullwidth">
                  <select name="competition" id="competition">
                    <option selected="true" disabled>---- Pilih Cabang ----</option>
                    @foreach($choose_competition as $choose_competitions)
                    <option value="{{ $choose_competitions->id }}">{{ $choose_competitions->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <div class="field">
              <label class="label ">Jumlah Anggota</label>
              <div class="control">
                <div class="select is-fullwidth">
                  <select id="jumlah" name="jumlah">
                    <option selected="true" disabled>---- Pilih Jumlah Anggota ----</option>
                    <option value="1">1 Anggota</option>
                    <option value="2">2 Anggota</option>
                    <option value="3">3 Anggota</option>
                  </select>
                </div>
              </div>
            </div>

            <script type='text/javascript'>
              $(document).ready(function() {
                $('select').on('change', function() {

                    if ($(this).val() == 1) {
                      $("#anggota1").prop('disabled',false).show();
                      $("#anggota2").prop('disabled',true).hide();
                      $("#anggota3").prop('disabled',true).hide();
                      $("#button").prop('disabled',false).show();
                    } else if ($(this).val() == 2) {
                      $("#anggota1").prop('disabled',false).show();
                      $("#anggota2").prop('disabled',false).show();
                      $("#anggota3").prop('disabled',true).hide();
                      $("#button").prop('disabled',false).show();
                    } else if ($(this).val() == 3) {
                      $("#anggota1").prop('disabled',false).show();
                      $("#anggota2").prop('disabled',false).show();
                      $("#anggota3").prop('disabled',false).show();
                      $("#button").prop('disabled',false).show();
                    }
                });
              });
            </script>

          </section>
        </div>
      </div>
      <!-- End Data Tim -->
    </div>
    <div class="columns">
    <!-- Ketua Tim -->
      <div class="column">
        <fieldset id="anggota1" style="border: none; display: none;">
        <div class="box">
          <section>
            <h6 class="title is-6 has-text-centered">Data Ketua</h6>
            <div class="field{{ $errors->has('member1') ? ' has-error' : '' }}">
              <label class="label ">Nama Ketua TIM</label>
              <div class="control ">
                <input class="input is-medium" id="member1" name="member1" type="text" style="background-image: url({{ asset('images/index/icon/avatar.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ old('member1') }}" placeholder="Nama Lengkap Ketua" required>
              @if ($errors->has('member1'))
              <span class="help-block">
                <strong>{{ $errors->first('member1') }}</strong>
              </span>
              @endif
              </div>
            </div>
            <div class="field{{ $errors->has('identity_number1') ? ' has-error' : '' }}">
              <label class="label ">No. Identitas Ketua</label>
              <div class="control ">
                <input class="input is-medium" id="identity_number1" name="identity_number1" type="text" style="background-image: url({{ asset('images/index/icon/id-card.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ old('identity_number1') }}" placeholder="No. Identitas Ketua" required>
              @if ($errors->has('identity_number1'))
              <span class="help-block">
                <strong>{{ $errors->first('identity_number1') }}</strong>
              </span>
              @endif
              </div>
            </div>
            <div class="field{{ $errors->has('contact1') ? ' has-error' : '' }}">
              <label class="label ">No. Telepon Ketua</label>
              <div class="control ">
                <input class="input is-medium" id="contact1" name="contact1" type="number" style="background-image: url({{ asset('images/index/icon/phone-call.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ old('contact1') }}" placeholder="No. Telepon Ketua" required>
              @if ($errors->has('contact1'))
              <span class="help-block">
                <strong>{{ $errors->first('contact1') }}</strong>
              </span>
              @endif
              </div>
            </div>
            <div class="field{{ $errors->has('identity_card1') ? ' has-error' : '' }}">
              <label class="label">Kartu Identitas Ketua</label>
              <div class="file is-light-green has-name">
                <label class="file-label">
                  <input class="file-input" type="file" id="identity_card1" name="identity_card1" required>
                  <span class="file-cta">
                    <span class="icon">
                      <i class="fa fa-upload fa-sw"></i>
                    </span>
                    <span class="file-label">
                      Upload file
                    </span>
                  </span>
                  <span id="file-name1" class="file-name">
                    .jpg .png
                  </span>
                </label>
              </div>
            </div>
          </section>
        </div>
        </fieldset>
      </div>
      <!-- End Ketua Tim -->
      <!-- Anggota 1 -->
      <div class="column" id="anggota1">
        <fieldset id="anggota2" style="border: none; display: none;">
        <div class="box">
          <section>
            <h6 class="title is-6 has-text-centered">Nama Anggota 1</h6>
            <div class="field{{ $errors->has('member2') ? ' has-error' : '' }}">
              <label class="label ">Nama Ketua TIM</label>
              <div class="control ">
                <input class="input is-medium" id="member2" name="member2" type="text" style="background-image: url({{ asset('images/index/icon/avatar.svg') }});
                    background-position: 10px 9px;
                    background-repeat: no-repeat;
                    background-size: 26px;
                    padding-left: 50px;" value="{{ old('member2') }}" placeholder="Nama Lengkap Anggota 1" required>
              @if ($errors->has('member2'))
              <span class="help-block">
                <strong>{{ $errors->first('member2') }}</strong>
              </span>
              @endif
              </div>
            </div>
            <div class="field{{ $errors->has('identity_number2') ? ' has-error' : '' }}">
              <label class="label ">No. Identitas Anggota 1</label>
              <div class="control ">
                <input class="input is-medium" id="identity_number2" name="ide