<?php namespace AP\Http\Controllers;

use AP\Repositories\Faq\FaqInterface;

/**
 * Class FaqController
 * @author Phillip Madsen
 */
class FaqController extends Controller {

    /**
     * @var AP\Repositories\Faq\FaqInterface
     */
    protected $faq;

    /**
     * @param FaqInterface $faq
     */
    public function __construct(FaqInterface $faq) {

        $this->faq = $faq;
    }

    /**
     * Display page
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show() {

        $faqs = $this->faq->all();

        return view('frontend.faq.show', compact('faqs'));
    }
}
