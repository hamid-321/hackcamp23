<?php

class Pagination {
    public $currentPage;
    public $totalPages;
    public $baseUrl;
    private $maxPagesToShow;

    public function __construct($currentPage, $totalRecords, $recordsPerPage, $baseUrl, $maxPagesToShow = 5) {
        // Initialize pagination properties
        $this->currentPage = $currentPage;
        $this->totalPages = (int)$totalRecords / (int)$recordsPerPage;
        $this->baseUrl = $baseUrl;
        $this->maxPagesToShow = $maxPagesToShow;
    }

    public function getLinks() {
        // Calculate start and end pages for the pagination links
        $halfMaxPagesToShow = floor($this->maxPagesToShow / 2);
        $startPage = max(1, $this->currentPage - $halfMaxPagesToShow);
        $endPage = min($this->totalPages, $startPage + $this->maxPagesToShow - 1);
        // Adjust start page if not enough pages are available to show maxPagesToShow
        if ($endPage - $startPage < $this->maxPagesToShow - 1) {
            $startPage = max(1, $endPage - $this->maxPagesToShow + 1);
        }
        // Generate an array of pagination links
        $paginationLinks = [];
        for ($page = $startPage; $page <= $endPage; $page++) {
            $paginationLinks[] = $page;
        }
        return $paginationLinks;
    }
}