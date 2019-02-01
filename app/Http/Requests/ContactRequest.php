

<!-- namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == "input")
        {
          return true;
        }else
        {
          return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          "name" => "string|required"
          "hurigana" => "string|required"
          "email" => "email|required",
          "content" => "string|required",
        ];
    }

    public function messages()
    {
        return[
          "name.required" => "名前の書き方が不正です"
          "hurigana.required" => "フリガナの書き方が不正です"
          "mail.required" => "メールアドレスの書き方が不正です"
          "content.required" => "お問い合わせ内容が不正です"
        ]
    }
} -->
