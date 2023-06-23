<?php

namespace Pterodactyl\Http\Controllers\Admin\Extensions\bpidentifierreplace;

use Illuminate\View\View;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Services\Helpers\BlueprintExtensionLibrary;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Pterodactyl\Http\Requests\Admin\Extensions\bpidentifierreplace\bpidentifierreplaceSettingsFormRequest;
use Illuminate\Http\RedirectResponse;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class bpidentifierreplaceExtensionController extends Controller
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
      $this->blueprint->dbSet($this->blueprint->dbGet('^#identifier#^', 'table')."::".$this->blueprint->dbGet('^#identifier#^', 'item'), $this->blueprint->dbGet('^#identifier#^', 'value'));

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
  public function update(bpidentifierreplaceSettingsFormRequest $request): RedirectResponse
  {
    foreach ($request->normalize() as $key => $value) {
      $this->settings->set('^#identifier#^::' . $key, $value);
    }

    return redirect()->route('admin.extensions.^#identifier#^.index');
  }
}
