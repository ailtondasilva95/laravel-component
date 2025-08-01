<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    use Traits\FormFieldHelper;

    /**
     * ID único do campo.
     *
     * Gerado automaticamente por `generateId()` se não for fornecido.
     * Usado principalmente para associar labels com inputs via atributo `for`.
     *
     * Exemplo: "permissions-create-5f34a1b2c"
     *
     * @var string
     */
    public string $id;

    /**
     * Nome do campo em notação de ponto (dot notation).
     *
     * Converte nomes com colchetes (ex: user[profile][name]) para formato compatível
     * com `old()` e `errors()` do Laravel (ex: user.profile.name).
     *
     * Usado para recuperar valores antigos e verificar erros de validação.
     *
     * @var string
     */
    public string $dotName;

    /**
     * Cria uma nova instância do componente Textarea.
     *
     * Renderiza um campo textarea com suporte a:
     * - Rótulo e placeholder
     * - Ícones esquerdo/direito (usando Bootstrap Icons ou similar)
     * - Texto de canto (ex: contador, dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string      $name        Nome do campo (ex: 'bio'). Usado em `name` e `id`.
     * @param  ?string     $label       Rótulo exibido acima do campo (opcional).
     * @param  ?string     $value       Valor inicial do campo (substituído por `old()` se houver).
     * @param  ?string     $placeholder Texto de placeholder (quando o campo está vazio).
     * @param  ?string     $icon        Ícone à esquerda do campo (ex: 'pencil').
     * @param  ?string     $rightIcon   Ícone à direita do campo (ex: 'bi bi-info-circle').
     * @param  ?string     $corner      Texto ou ícone exibido no canto inferior direito (ex: "máx. 200 caracteres").
     * @param  bool        $required    Define se o campo é obrigatório (exibe * e marca `required`).
     * @param  int         $rows        Número de linhas visíveis do textarea (padrão: 4).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $rightIcon,
        public ?string $placeholder,
        public bool $required = false,
        public int $rows = 4
    ) {
        $this->processFieldData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}