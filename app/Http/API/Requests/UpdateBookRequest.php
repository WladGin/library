<?php

namespace App\Http\Api\Requests;

use App\Models\Author;
use App\Models\Book;
use App\Models\PublishingHouse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['string', Rule::unique(Book::class)],
            'description' => ['string', 'nullable'],
            'authors' => ['array'],
            'authors.*' => ['int', Rule::exists(Author::class, 'id')],
            'publishing_houses' => ['array'],
            'publishing_houses.*' => ['int', Rule::exists(PublishingHouse::class, 'id')],

        ];
    }
}
