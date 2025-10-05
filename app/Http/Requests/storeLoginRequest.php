<?php
// Define o namespace para que essa classe possa ser utilizada em outros arquivos corretamente
namespace App\Http\Requests;

// Importa a classe FormRequest do Laravel que será estendida
use Illuminate\Foundation\Http\FormRequest;

// Declara a classe StoreLoginRequest que herda funcionalidades de FormRequest
class StoreLoginRequest extends FormRequest
{
    // Define se esta requisição está autorizada a ser processada
    public function authorize(): bool
    {
        // Neste caso, sempre retorna true, ou seja, qualquer um pode fazer essa requisição
        return true;
    }

    // Define as regras de validação para os dados que estão sendo enviados no formulário
    public function rules(): array
    {
        return [
            // O campo "user-email" é obrigatório e precisa estar em formato de email
            'user-email' => 'required|email',

            // O campo "user-password" é obrigatório e deve ter no mínimo 6 caracteres
            'user-password' => 'required|min:6',
        ];
    }

    // Define mensagens de erro personalizadas caso as regras acima não sejam cumpridas
    public function messages(): array
    {
        return [
            // Mensagem quando o email não é preenchido
            'user-email.required' => 'O email é obrigatório',

            // Mensagem quando o email tem formato inválido
            'user-email.email' => 'Digite um email válido',

            // Mensagem quando a senha não é preenchida
            'user-password.required' => 'A senha é obrigatória',

            // Mensagem quando a senha tem menos de 6 caracteres
            'user-password.min' => 'A senha deve ter pelo menos 6 caracteres',
        ];
    }
}

