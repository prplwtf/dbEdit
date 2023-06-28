<?php

namespace Pterodactyl\Http\Controllers\Admin\Extensions\__identifier__;

use Illuminate\View\View;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Services\Helpers\BlueprintExtensionLibrary;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Http\RedirectResponse;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;
use Pterodactyl\Http\Requests\Admin\AdminFormRequest;

class __identifier__ExtensionController extends Controller
{

  /**
   * ^#identifier#^ExtensionController constructor.
   */
  public function __construct(
    private BlueprintExtensionLibrary $blueprint,
  
    private ViewFactory $view,
    private ConfigRepository $config,
    private SettingsRepositoryInterface $settings,
    ) {
  }

  /**
   * Return the admin index view.
   */
  public function index(): View
  {
    if($this->blueprint->dbGet('^#identifier#^', 'table') == null) {$this->blueprint->dbSet('^#identifier#^', 'table', '');}
    if($this->blueprint->dbGet('^#identifier#^', 'item') == null) {$this->blueprint->dbSet('^#identifier#^', 'item', '');}
    if($this->blueprint->dbGet('^#identifier#^', 'value') == null) {$this->blueprint->dbSet('^#identifier#^', 'value', '');}

    # SET DATABASE VALUE
    if($this->blueprint->dbGet('^#identifier#^', 'table') != "" && $this->blueprint->dbGet('^#identifier#^', 'item') != "" && $this->blueprint->dbGet('^#identifier#^', 'value') != "") {
      $this->blueprint->dbSet($this->blueprint->dbGet('^#identifier#^', 'table'), $this->blueprint->dbGet('^#identifier#^', 'item'), $this->blueprint->dbGet('^#identifier#^', 'value'));

      $this->blueprint->notify("(dbedit) ".$this->blueprint->dbGet('^#identifier#^', 'table')."::".$this->blueprint->dbGet('^#identifier#^', 'item')." has been set to ".$this->blueprint->dbGet('^#identifier#^', 'value').".");

      $this->blueprint->dbSet('^#identifier#^', 'table', '');
      $this->blueprint->dbSet('^#identifier#^', 'item', '');
      $this->blueprint->dbSet('^#identifier#^', 'value', '');
    };

    return $this->view->make(
      'admin.extensions.^#identifier#^.index', [
        'blueprint' => $this->blueprint,
        'root' => "/admin/extensions/blueprint",
      ]
    );
  }

  /**
   * @throws \Pterodactyl\Exceptions\Model\DataValidationException
   * @throws \Pterodactyl\Exceptions\Repository\RecordNotFoundException
   */
  public function update(__identifier__SettingsFormRequest $request): RedirectResponse
  {
    foreach ($request->normalize() as $key => $value) {
      $this->settings->set('^#identifier#^::' . $key, $value);
    }

    return redirect()->route('admin.extensions.^#identifier#^.index');
  }
}

class __identifier__SettingsFormRequest extends AdminFormRequest
{
    /**
     * Return all the rules to apply to this request's data.
     */
    public function rules(): array
    {
        return [
            'table' => 'string',
            'item' => 'string',
            'value' => 'string',
        ];
    }

    public function attributes(): array
    {
        return [
            'table' => 'Database Table',
            'item' => 'Database Item',
            'value' => 'Database Value',
        ];
    }
}