@extends('adminlte::page')

@section('title', 'Registrar funcionário')

{{-- <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}"> --}}
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.5.0.js') }}"></script>

@section('content_header')
    <h1 class="m-0 text-dark">Editar funcionário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
          <div class="margin-left">
            <form action="{{ URL::to('admin/funcionarios/'.$func->id) }}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="password" id="password">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td>Data de nascimento:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="nome" value="{{ $func->name }}" placeholder="e.g. Marco Aurélio Silva" required autofocus>
                        </td>
                        <td>
                            <input type="date" class="form-control" name="dataNascimento" value="{{ $func->dataNascimento }}" required autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>CPF:</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="telefone" value="{{ $func->telefone }}"  placeholder="e.g. (41) 98484-4848" required autofocus></td>
                        <td><input type="text" class="form-control" name="cpf" value="{{ $func->cpf }}"  placeholder="e.g. 145.541.415-15" required autofocus></td>
                    </tr>
                    <tr>
                        <td>E-Mail:</td>
                        <td>Data de admissão:</td>

                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" name="email" value="{{ $func->email }}"  required autofocus></td>
                        <td><input type="date" class="form-control" name="dataAdmissao" value="{{ $func->dataAdmissao }}"  required autofocus></td>
                    </tr>
                    <tr>
                        <td class="margin-top"> Cargo:</td>
                        <td>Dias de Ferias restantes:</td>
                    </tr>
                    <tr>
                        <td><select class="form-control" name="cargo" value="{{ $func->cargo }}"  required autofocus>
                                @foreach ($cargos as $cargo)
                                    <option value="{{ $cargo->id }}">{{ $cargo->id.' - '.$cargo->nome }}</option>
                                @endforeach  
                            </select>
                        </td>
                        <td><input type="number" class="form-control" name="ferias" value="{{ $func->ferias }}" required autofocus></td>
                    </tr>
                    <tr>
                        <td><br><a href="{{ url()->previous() }}" class="btn btn-dark form-control">Voltar</a></button></td>
                        <td><br><button type="submit" class="btn btn-success form-control">Salvar</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><button type="button" id="editPassword" class="btn btn-danger form-control">Editar senha</button></td>
                    </tr>
                </table>
            </form>
          </div>
        </div>
    </div>


    <div id="passwordModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Senha do Funcionário</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span id="form_output"></span>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="modal_password" id="modal_password" 
                            class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="button_action" id="button_action" value="update">
                        <button class="btn btn-dark" id="editSave" data-dismiss="modal">Salvar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $(document).on('click', '#editPassword', function() {
                $('#passwordModal').modal('show');
            });

            $(document).on('click', '#editSave', function() {
                $('#password').val($('#modal_password').val());
            })
        });
    </script>
@stop