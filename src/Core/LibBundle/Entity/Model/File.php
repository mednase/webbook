<?php 

namespace Core\LibBundle\Entity\Model;

/**
 * File
 */
class File
{
    /**
     * @param $mimeType
     * @return bool
     */
    public function _doesFileExist($path) {
        return file_exists($path);
    }

    /**
     * public functions
     */
    public function _checkFileType($mimeType, $path)
    {
        // sanity check

        if (!$this->_doesFileExist($path)) return 'inexistent';
        if ($this->_isAudio($mimeType))        return 'audio';
        if ($this->_isArchive($mimeType))      return 'archive';
        if ($this->_isHTML($mimeType))         return 'html';
        if ($this->_isImage($mimeType))        return 'image';
        if ($this->_isPDFDocument($mimeType))  return 'pdf-document';
        if ($this->_isPlainText($mimeType))    return 'plain-text';
        if ($this->_isPresentation($mimeType)) return 'presentation';
        if ($this->_isSpreadsheet($mimeType))  return 'spreadsheet';
        if ($this->_isTextDocument($mimeType)) return 'text-document';
        if ($this->_isVideo($mimeType))        return 'video';
        // else
        return 'unknown';
    }

    public function _isAudio($mimeType)
    {
        return (preg_match('/audio\/.*/i', $mimeType));
    }

    public function _isArchive($mimeType)
    {
        return (
            preg_match('/application\/.*compress.*/i', $mimeType) ||
            preg_match('/application\/.*archive.*/i', $mimeType) ||
            preg_match('/application\/.*zip.*/i', $mimeType) ||
            preg_match('/application\/.*tar.*/i', $mimeType) ||
            preg_match('/application\/x\-ace/i', $mimeType) ||
            preg_match('/application\/x\-bz2/i', $mimeType) ||
            preg_match('/gzip\/document/i', $mimeType)
        );
    }

    public function _isHTML($mimeType)
    {
        return (preg_match('/text\/html/i', $mimeType));
    }

    public function _isImage($mimeType)
    {
        return (preg_match('/image\/.*/i', $mimeType));
    }

    public function _isPDFDocument($mimeType)
    {
        return (
            preg_match('/application\/acrobat/i', $mimeType) ||
            preg_match('/applications?\/.*pdf.*/i', $mimeType) ||
            preg_match('/text\/.*pdf.*/i', $mimeType)
        );
    }

    public function _isPlainText($mimeType)
    {
        return (preg_match('/text\/plain/i', $mimeType));
    }

    public function _isPresentation($mimeType)
    {
        return (
            preg_match('/application\/.*ms\-powerpoint.*/i', $mimeType) ||
            preg_match('/application\/.*officedocument\.presentationml.*/i', $mimeType) ||
            preg_match('/application\/.*opendocument\.presentation.*/i', $mimeType)
        );
    }

    public function _isSpreadsheet($mimeType)
    {
        return (
            preg_match('/application\/.*ms\-excel.*/i', $mimeType) ||
            preg_match('/application\/.*officedocument\.spreadsheetml.*/i', $mimeType) ||
            preg_match('/application\/.*opendocument\.spreadsheet.*/i', $mimeType)
        );
    }

    public function _isTextDocument($mimeType)
    {
        return (
            preg_match('/application\/.*ms\-?word.*/i', $mimeType) ||
            preg_match('/application\/.*officedocument\.wordprocessingml.*/i', $mimeType) ||
            preg_match('/application\/.*opendocument\.text.*/i', $mimeType)
        );
    }

    public function _isVideo($mimeType)
    {
        return (preg_match('/video\/.*/i', $mimeType));
    }
}
