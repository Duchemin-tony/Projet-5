<?php
namespace App\Blog\Actions;

use App\Blog\Table\PostTable;
use Framework\Actions\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Framework\Router;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

class AdminBlogAction
{

    /**
     * @var RendererInterface
     */
    private $renderer;

    /**
     * @var Router
     */
    private $router;
    /**
     * @var PostTable
     */
    private $postTable;

    use RouterAwareAction;

    public function __construct(RendererInterface $renderer, Router $router, PostTable $postTable)
    {
        $this->renderer = $renderer;
        $this->router = $router;
        $this->postTable = $postTable;
    }

    public function __invoke(Request $request)
    {
        if ($request->getAttribute('id')) {
            return $this->edit($request);
        }
        return $this->index($request);
    }

    public function index(Request $request): string
    {
        $params = $request->getQueryParams();
        $items = $this->postTable->findPaginated(12, $params['p'] ?? 1);

        return $this->renderer->render('@blog/admin/index', compact('items'));
    }

    /**
    * Edite un article
    * @param Request $request
    * @return ResponseInterface|string
    */
    public function edit(Request $request)
    {
        $item = $this->postTable->find($request->getAttribute('id'));

        if ($request->getMethod() === 'POST')
        {
            $params = array_filter($request->getParsedBody(), function ($key) {
                return in_array($key, ['name', 'slug', 'content']);
            }, ARRAY_FILTER_USE_KEY);
            $this->postTable->update($item->id, $params);
            return $this->redirect('admin.blog.index');
        }

        return $this->renderer->render('@blog/admin/edit', compact('item'));
    }
}
