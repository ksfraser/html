Enable repo hooks

This repository contains a set of hooks in the `.githooks/` directory. To enable them locally, run:

```sh
git config core.hooksPath .githooks
```

The pre-commit hook runs a PHP script that checks staged PHP files for `@since` tags in docblocks.

Also recommended (optional): set the local commit template:

```sh
git config commit.template commit-template.txt
```

If you don't have PHP CLI on your PATH, install PHP or adjust the pre-commit hook to call the script differently.

Configuration
- Create a `.sincecheck.json` at the repository root to tweak behavior. Example (lenient):

```
{
	"lenient": true,
	"allow_param_type_mismatch": true,
	"allow_missing_return": true
}
```

The CI workflow `.github/workflows/since-check.yml` runs the same checker in `--ci` mode (scans repository PHP files).
